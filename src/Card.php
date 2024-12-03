<?php

namespace Gomez\PooTp;

class Card {
    private string $question;
    private string $answer;

    public function __construct(string $question, string $answer) 
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getQuestion() : string
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer() : string
    {
        return $this->answer;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }
}