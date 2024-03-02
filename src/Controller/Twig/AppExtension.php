<?php
namespace App\Twig;

use App\Repository\JobRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    private $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('jobs_count', [$this, 'getJobsCount']),
        ];
    }

    public function getJobsCount($categoryName)
    {
        // Implement the logic to get the job count for the given category name
        return $this->jobRepository->countJobsByCategory($categoryName);
    }
}
