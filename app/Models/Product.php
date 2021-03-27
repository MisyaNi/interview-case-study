<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // public function toArray($request)
    // {
    //     return [
    //         'id' => $this->id,
    //         'title' => $this->title,
    //         'price' => $this->price,
    //         'qty' => $this->qty,
    //         'description' => $this->description,
    //         'publisher' => $this->publisher,
    //         'format' => $this->format,
    //         'category' => $this->category,
    //         'created_at' => $this->created_at->format('d/m/Y'),
    //         'updated_at' => $this->updated_at->format('d/m/Y'),
    //     ];
    // }
}
