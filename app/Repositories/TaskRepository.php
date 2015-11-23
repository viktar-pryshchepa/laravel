<?php
/**
 * Created by PhpStorm.
 * User: viktar
 * Date: 23.11.2015
 * Time: 23:04
 */

namespace App\Repositories;

use App\Task;
use App\User;


class TaskRepository {
  /**
   * Get all of the tasks for a given user.
   *
   * @param  User  $user
   * @return Collection
   */
  public function forUser(User $user)
  {
    return Task::where('user_id', $user->id)
        ->orderBy('created_at', 'asc')
        ->get();
  }
}