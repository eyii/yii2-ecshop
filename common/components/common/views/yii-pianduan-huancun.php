<?php
if ($this->beginCache($cacheId, $options)) {
   echo $content;
    $this->endCache();
}
?>