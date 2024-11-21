<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    return true;
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Project $project): bool
  {
    // Member and Creators of the Project has access to Project,
    return $user->memberships->contains($project);
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool
  {
    // every signed in User can create Projects
    return true;
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Project $project): bool
  {
    // check if User is the creator of the Project
    return $user->id === $project->creator_id;
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Project $project): bool
  {
    return $user->id === $project->creator_id;
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Project $project): bool
  {
    return false;
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Project $project): bool
  {
    return false;
  }
}
