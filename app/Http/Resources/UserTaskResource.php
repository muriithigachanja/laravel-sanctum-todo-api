<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserTaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'remarks' => $this->remarks,
                'due_date' => $this->due_date,
                'start_time' => $this->start_time,
                'end_time' => $this->end_time,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
            'User' => [
                'id'=> (string)$this->user->id,
                'Name' => $this->user->name,
            ],
            'Task' => [
                'id'=> (string)$this->task->id,
                'Name' => $this->task->name,
            ],
            'Status' => [
                'id'=> (string)$this->status->id,
                'Name' => $this->status->name,
            ]
        ];
    }
}
