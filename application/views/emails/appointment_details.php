<html lang="en">
<body style="font: 18px arial, helvetica, tahoma;">

        <h4><?= lang('appointment_details_title') ?></h4>
        <table>
      <p><?= $email_message ?></p>
              <tr>
                <td class="label"><strong><?= lang('name') ?>:</strong> &nbsp;<?= $customer_name ?></td>
            </tr>
            <tr>
                <td class="label"><strong><?= lang('email') ?>:</strong> &nbsp;<?= $customer_email ?></td>
            </tr>

            <tr>
                <td class="label"><strong><?= lang('service') ?>:</strong> &nbsp;<?= $appointment_service ?></td>
            </tr> 
            <tr>
                <td class="label"><strong><?= lang('start') ?>:</strong> &nbsp;<?= $appointment_start_date ?></td>
            </tr>
            <tr>
                <td class="label"><strong><?= lang('end') ?>:</strong> &nbsp;<?= $appointment_end_date ?></td>
            </tr>
            <tr>
                <td class="label"><strong><?= lang('timezone') ?>:</strong> &nbsp; <?= $appointment_timezone ?></td>
            </tr>
           
        </table>
      <br>
  Join online meeting at <a href="https://meet.google.com/bvp-wrwm-ibu">this link</a> at the time of the appointment. Also, if you need to do so you can <a href="<?= $appointment_link ?>">edit this appointment.</a>
        <br>
     
      <br>
          <br>


</body>
</html>