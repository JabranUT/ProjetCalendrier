<!DOCTYPE html>
    <html>
    <head>
        <title>Calendrier</title>
        <script type="text/javascript" src="jquery-3.6.4.js"></script>
       .<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
        <script type="text/javascript">
            Jquery(function ($){
                $('.month').hide();
                $('.month:first').show();
                $('.months a:first').addClass('active');
                var current = 1;
                $('.months a').click(function (){
                    var month = $(this).attr('id').replace('linkMonth','');
                    if(month != current){
                        $('#month' + current).slideUp();
                        $('#month' + month).slideDown();
                        $('.months a').removeClass('active');
                        $('.months a#linkMonth ' + month).addClass('active');
                        current = month;
                    }
                    return false;
                });
            });
        </script>
        <style>
            th, td{
                border: black 1px solid ;
            }
            .months{
                border: black 1px solid;
            }
            .months li{

                display: inline-block;
                list-style-type: none ;
            }
        </style>
    </head>
    <body>
    <?php

    $date = new Date();
    $year = date('y');
    $events = $date->getEvents($year);
    $dates = $date->getAll($year);
    ?>
    <div class="periode">
        <div class="year"><?php echo $year; ?></div>
        <div class="months">
        <ul>
            <?php foreach ($date->months as  $id=>$m): ?>
            <li><h2><a href="#" id="linkMonth <?php echo $id+1; ?>"><?php echo  utf8_encode(substr(utf8_decode($m), 0, 9)); ?></a></h2></li>
            <?php endforeach; ?>
        </ul>
        </div>
        <div class="clear"></div>
        <?php $dates = current($dates); ?>
        <?php foreach ($dates as $m=>$days): ?>
        <div class="month" id="month"<?php echo $m; ?>">
        <table>
            <thead>
                <tr>
                    <?php foreach ($date->days as $d): ?>
                    <th><?php echo substr($d, 0, 3); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
            <tr>
            <?php $end = end($days); foreach ($days as $d=>$w): ?>
                <?php $time = strtotime("$year-$m-$d"); ?></php>
            <?php if ($d == 1): ?>
                <td colspan="<?php echo $w-1; ?>"></td>
            <?php endif; ?>
            <td>
                <div class="relative">
                <div class="day"><?php echo $d; ?></div>
                </div>
                <ul class="events">

                    <?php if (isset($events[$time])):foreach ($events[$time] as $e):?>
                    <li><?php echo $e; ?></li>
                    <?php endforeach; endif; ?>
                </ul>

            </td>

            <?php if ($w == 7): ?>
            </tr>
            <tr>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($end != 7): ?>
                <td colspan="<?php echo 7-$end; ?>"></td>
                <?php endif; ?>
            </tr>
            </tbody>
        </table>
    </div>
    <?php endforeach; ?>
    </div>
    </body>
    </html>