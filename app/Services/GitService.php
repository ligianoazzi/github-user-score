<?php

namespace App\Services;

use Illuminate\Support\Collection;

class GitService
{
	public function CalculatingScore($data){		
		$collection = new \Illuminate\Support\Collection(json_decode($data, true));

        $Push = $collection->where("type", "PushEvent");
        $PushScore = $Push->count() * 10;

        $PullRequest = $collection->where("type", "PullRequestEvent");
        $PullRequestScore = $PullRequest->count() * 5;        

        $IssueComment = $collection->where("type", "IssueCommentEvent");
        $IssueCommentScore = $IssueComment->count() * 4;                

		$otherEvents = $collection->whereNotIn('type', ["PushEvent", "PullRequestEvent", "IssueCommentEvent"]);
		$otherEventsScore = $otherEvents->count();                

		$totalScore = $PushScore + $PullRequestScore + $IssueCommentScore + $otherEventsScore;

		return $totalScore;
	}
}