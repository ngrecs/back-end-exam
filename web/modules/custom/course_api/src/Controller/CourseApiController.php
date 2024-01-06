<?php

namespace Drupal\course_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class CourseApiController extends ControllerBase {

  /**
   * Returns a list of courses in JSON format.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response.
   */
  public function getCourses() {

    $courses = [
      [
        'courseName' => 'Example Course',
        'description' => 'Course Description',

      ],

    ];

    return new JsonResponse($courses);
  }

}
?>
