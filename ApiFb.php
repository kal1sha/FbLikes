 <?php
class ApiFb
{
    protected $accessToken = '';

    /**
     * В конструкторе сохраняем token
     *
     * @param string $accessToken
     */
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    } 

    /**
     * Инициализация ссылки и генерация на новый запрос
     *
     * @param string $method
     * @return mixed
     */    
    public function init($method)
    {
        $bodytag = str_replace("http://www.facebook.com/", "", $method);

        # likes комментариев в фотографиях
        if (ereg("photo.php\?fbid=(.*)\&set=.*&comment_id=(.*)&offset=.*", $method, $data)) {
          return $this->callMethod($data[1].'_'.$data[2]);
        }

        # likes фотографии
        if (ereg("photo.php\?fbid=(.*)\&set=.*", $method, $data)) {
          return $this->callMethod($data[1]);
        }

        # likes комментариев в посте в заметках
        if (ereg(".*\/notes\/.*\/(.*)\?comment_id=(.*)&offset=.*", $method, $data)) {
          return $this->callMethod($data[1].'_'.$data[2]);
        }

        # likes в посте в заметках
        if (ereg(".*\/notes\/.*\/(.*)", $method, $data)) {
          return $this->callMethod($data[1]);
        }

        # likes коментариев в записях на стенке
        if (ereg(".*\/posts\/(.*)\?comment_id=(.*)\&offset=.*", $method, $data)) {
          return $this->callMethod($data[1].'_'.$data[2]);
        }

        # likes в записи на стенке
        if (ereg(".*\/posts\/(.*)", $method, $data)) {
          return $this->callMethod($data[1]);
        }

        #likes комментариев записи в группе
        if (ereg("groups\/(.*)\/permalink\/(.*)\/\?comment_id=(.*)&offset=.*", $method, $data)) {
          return $this->callMethod($data[1].'_'.$data[2].'_'.$data[3]);
        }

        # likes в записи группу
        if (ereg("groups\/(.*)\/permalink\/(.*)\/", $method, $data)) {
          return $this->callMethod($data[1].'_'.$data[2]);
        }

        # likes группы
        if (ereg("groups\/(.*)\/", $method, $data)) {
          return $this->callMethod($data[1]);
        }

    }

    /**
     * Метод, который делает запрос в facebook.com и возращает likes
     *
     * @param string $method
     * @return mixed
     */
    public function callMethod($method)
    {      
      $url = 'https://graph.facebook.com/'.$method.'/likes?access_token='.$this->accessToken;
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
      $content = curl_exec($ch);
      $content = json_decode($content);
      return $content;    
    } 
}
?>