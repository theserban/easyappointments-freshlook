<html lang="en">
<body style="font: 18px arial, helvetica, tahoma;">


       <h4><?= lang('appointment_cancelled_title') ?></h4>
 <table>
     <p><?= lang('appointment_removed_from_schedule') ?></p>
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
                <td class="label" ><strong><?= lang('start') ?>:</strong> &nbsp; <?= $appointment_date ?></td>
            </tr>            <tr>
                <td class="label"><strong><?= lang('timezone') ?>:</strong> &nbsp; <?= $appointment_timezone ?></td>
            </tr>
        </table>

           <h4><?= lang('reason') ?>:</h4>
        <p><?= $reason ?></p>
    </div>


</body>
</html>
