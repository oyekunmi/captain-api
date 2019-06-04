<?php
namespace App\Mail;

use App\Certificate;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificatesExpiring extends Mailable{
  use Queueable, SerializesModels;

  /**
   * The certificate instance.
   *
   * @var Certificate
  */
  public $certificates;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(array $certificates)
  {
      $this->certificates = $certificates;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
      return $this->view('emails.certificates.expiring');
  }
}