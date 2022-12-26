<?php

class OneColumnTpl extends Template
{
  protected function getHeader($logo)
  {
    $this->logo = $logo;

    echo '<header';
    echo '<img src="'.$this->logo.'"alt="logo"/>';
    echo '</header';
  }

  protected function getSection($content)
  {
    $this->content = $content;

    echo '<section>';
    echo '<article>'.$this->content.'</article';
    echo '</section>';
  }

  protected function getFooter($copyright)
  {
    $this->copyright = $copyright;
    echo '<footer>'.$this->copyright.'</footer>';
  }
}

?>
