<?php

namespace App\Http\Resources\Quiz;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizQuestionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'quiz_id' => $this->id,
            'quiz_name' => $this->Qname,
            'quiz_content' => $this->Qcontent,
            'quiz_id' => $this->quiz_id,
            'system_id' => $this->system_id,
        ];
    }
}
