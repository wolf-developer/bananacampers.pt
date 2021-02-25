
<div class="col-md-12">
    <div class="content-panel">
        <table class="table table-bordered table-striped table-condensed">
        <h4><i class="fa fa-angle-right"></i> Booking Table</h4>
        <hr>
        <thead>
            <tr>
                <th>Client Email</th>            
                <th>Owner Email</th>
                <th>Start</th>
                <th>End</th>
                <th>Total</th>
                <th>Service</th>
                <th>Deposit</th>
                <th>Created at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($booking as $row):?>
            <tr>
                <td><?php echo $row->renter_email;?></td>
                <td><?php echo $row->owner_email;?></td>
                <td><?php echo $row->startDate;?></td>
                <td><?php echo $row->endDate;?></td>
                <td><?php echo $row->allday_pr+$row->service_pr;?></td>
                <td><?php echo $row->service_pr;?></td>
                <td><?php echo $row->deposit_pr;?></td>
                <td><?php echo $row->created_at;?></td>
                <td>
                    <span class="btn disabled <?php if($row->status==0){
                        echo 'btn-warning';
                    }else if($row->status==1){
                        echo 'btn-primary';
                    }else if($row->status==2){
                        echo 'btn-danger';
                    }else if($row->status==3){
                        echo 'btn-success';
                    }else if($row->status==4){
                        echo 'btn-primary';
                    }else if($row->status==5){
                        echo 'btn-info';
                    }else{
                        echo 'btn-light';
                    }
                    ?>">
                    <?php if($row->status==0){
                        echo 'pending';
                    }else if($row->status==1){
                        echo 'verified';
                    }else if($row->status==2){
                        echo 'rejected';
                    }else if($row->status==3){
                        echo 'approved';
                    }else if($row->status==4){
                        echo 'progressing';
                    }else if($row->status==5){
                        echo 'review'; 
                    }else{
                        echo 'completed';
                    }
                    ?></span>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </div>
</div>
