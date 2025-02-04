<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
       'title',
       'description',
       'status',
       'due_date'
    ];

      // Scope for Pending Tasks
      public function scopePending($query)
      {
          return $query->where('status', 'pending');
      }
  
      // Scope for Completed Tasks
      public function scopeCompleted($query)
      {
          return $query->where('status', 'completed');
      }
}
