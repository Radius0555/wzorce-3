<?php

class SendMail implements SplObserver
{
  public function update(SplSubject $mailing)
  {
    if($mailing->state == true)
    {
      mail(
        'to@example.com',
        'Subscriber',
        'Your email address has been added to the mailing list.'
      );
      echo 'Success!';
    }
  }
}

?>
