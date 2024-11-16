<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create(); // Create an employer
    $job = Job::factory()->create([
        'employer_id' => $employer->id, // Associate the job with the employer
    ]);
    expect($job->employer->is($employer))->toBeTrue(); // Assert that the job's employer is the created employer
});

it('can have tags', function () {
    $job = Job::factory()->create(); // Create a job
    $job->tag('Frontend'); // Tag the job with 'Frontend'
    expect($job->tags)->toHaveCount(1); // Assert that the job has one tag
}); 