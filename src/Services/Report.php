<?php


namespace PowerBiEmbedded\Services;


use PowerBiEmbedded\Responses\GetReportInGroupResponse;


/**
 * Class Report.
 *
 * @package PowerBiEmbedded\Services
 */
class Report extends Service
{

	/**
	 * Base service url.
	 *
	 * @var string
	 */
	protected $base_url = 'https://api.powerbi.com/v1.0/myorg/';

	/**
	 * Returns the specified report from the specified workspace.
     *
	 * @see https://docs.microsoft.com/ru-ru/rest/api/power-bi/reports/get-report-in-group
	 *
	 * @return GetReportInGroupResponse
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getGroups($workspace_id, $report_id)	{
        $endpoint = $this->base_url. 'groups/' . $workspace_id . '/reports/' . $report_id;
		return new GetReportInGroupResponse($this->client->request('GET', $endpoint));
	}
}
