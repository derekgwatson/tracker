class BuzApi
{
    protected $url = 'https://api.buzmanager.com/reports';

    public function importPosts($page = 1)
    {
        $posts = collect($this->getJson($this->url . 'posts/?_embed&filter[orderby]=modified&page=' . $page));
        foreach ($posts as $post) {
            $this->syncPost($post);
        }
    }

    protected function getJson($url)
    {
    	$response = file_get_contents($url, false);
        return json_decode( $response );
    }
}
