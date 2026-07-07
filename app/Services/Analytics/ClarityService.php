<?php

namespace App\Services\Analytics;

/**
 * Microsoft Clarity has no public data-retrieval API — behavior recordings
 * and heatmaps only exist inside Clarity's own hosted dashboard. This
 * service just tracks whether a project is connected and builds the link
 * to that official dashboard (opened directly, never embedded in an iframe
 * per Clarity's own terms of use).
 */
class ClarityService
{
    public function isConfigured(): bool
    {
        return (bool) setting('clarity_project_id');
    }

    public function projectId(): ?string
    {
        return setting('clarity_project_id') ?: null;
    }

    public function dashboardUrl(): ?string
    {
        $projectId = $this->projectId();

        return $projectId ? "https://clarity.microsoft.com/projects/view/{$projectId}/dashboard" : null;
    }
}
