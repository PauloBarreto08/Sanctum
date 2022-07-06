<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class classroomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'turma' => $this->turma,
            'horario' => $this->horario,
            'sala' => $this->sala,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    /* public function with( $request ){
    return [
      'version' => '1.0.0',
      'author_url' => url('https://terminalroot.com.br')
    ];
  } */
}
