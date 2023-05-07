<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Report extends Component
{
    public $search;
    public function getResults()
    {
        $results = User::where('name', 'like', '%'.$this->search.'%')->get();

        // Sort the results by whether they match the search term exactly
        $exactMatch = null;
        foreach ($results as $key => $result) {
            if ($result->name == $this->search) {
                $exactMatch = $result;
                unset($results[$key]);
                break;
            }
        }
        if ($exactMatch) {
            $results = $results->prepend($exactMatch);
        }

        return $results;
    }

    public function render()
    {
        $violations = $this->getResults();
        return view('livewire.user.report', ['violations' => $violations])
            ->extends('layouts.index')
            ->section('content')
            ->with('selectedViolation', $this->search);
    }
}
