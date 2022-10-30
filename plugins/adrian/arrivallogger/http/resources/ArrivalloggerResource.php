<?php
    namespace Adrian\Arrivallogger\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;

    class ArrivalloggerResource extends JsonResource {

        public function toArray($request) {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "late" => $this->late,
                "created_at" => date($this->created_at),
                "user_id" => $this->user_id
            ];
        }
        
    }