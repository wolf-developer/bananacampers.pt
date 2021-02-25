<style>
    body{
        background:#f3f4f5;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-9" style="background:white;height:auto">
            <div>
                <a href="/" >
                    <img src="/assets/img/sign.png" style="width:130px;height:75px;padding:5px;" alt="Monkey">
                </a>
            </div>
            <div><p style="font-size:18px;text-align:center"><b><?php echo $this->lang->line('steprang');?></b></p></div>
            <div class="col-xs-12 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle type">1</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Other vehicle informations">2</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle photo upload area">3</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Sleeping spots on the vehicle">4</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle Equipements">5</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle rental price">8</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle doc">9</button>
                </div>
            </div>
            <div >
                <h3><?php echo $this->lang->line('comst');?></h3>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
                                <label for="photo1"><?php echo $this->lang->line('comst1');?></label>
                                <input type="file" id="photo1" data-plugins="dropify" data-max-file-size="10M" />
                                <br>
                                <div class="form-group">
                                    <input type="date" id="doc1" class="form-control" placeholder="<?php echo $this->lang->line('createst1');?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
                                <label for="photo2"><?php echo $this->lang->line('comst2');?></label>
                                <input type="file" id="photo2" data-plugins="dropify" data-max-file-size="10M" />
                                <br>
                                <div class="form-group">
                                    <input type="text" id="doc2" class="form-control" placeholder="<?php echo $this->lang->line('createst2');?>">
                                </div>                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
                                <label for="photo3"><?php echo $this->lang->line('comst3');?></label>
                                <input type="file" id="photo3" data-plugins="dropify" data-max-file-size="10M" /> 
                                <br>
                                <div class="form-group">
                                    <input type="date" id="doc3" class="form-control" placeholder="<?php echo $this->lang->line('createst3');?>">
                                </div>                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div style="text-align:center">
                <hr>
                
                <button class="btn btn-success btn-block" onclick="complete()"><?php echo $this->lang->line('comst4');?></button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('comst4');?> !</h3>
                <p><?php echo $this->lang->line('comst5');?></p>
            </div>
        </div>
    </div>
</div>

<script>
    
    function complete(){
        
        var doc1=$('#photo1').val();
        var doc2=$('#photo2').val();
        var doc3=$('#photo3').val();
        var docname1=$('#doc1').val();
        var docname2=$('#doc2').val();
        var docname3=$('#doc3').val();
        if(docname1==''){$('#doc1').focus();return;}
        if(docname2==''){$('#doc2').focus();return;}
        if(docname3==''){$('#doc3').focus();return;}
        if(doc1!=''&&doc2!=''&&doc3!=''){
            var formdata = new FormData();
                formdata.append('doc1', $('#photo1')[0].files[0]);
                formdata.append('doc2', $('#photo2')[0].files[0]);
                formdata.append('doc3', $('#photo3')[0].files[0]);
                formdata.append('docname1',docname1);
                formdata.append('docname2',docname2);
                formdata.append('docname3',docname3);

            $.ajax({
                url: '/index.php/Create_ads/complete_ad',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                data: formdata,
                success:function (data) {
                    // $.post(
                    //     '/index.php/Create_ads/check_permit',
                    //     function(data){
                            // if(data=='yes'){
                                toastr_call('success','<?php echo $this->lang->line('sucad');?>');
                                var delayInMilliseconds = 5000;
                                
                                setTimeout(function() {
                                    window.location.href = '/';
                                }, delayInMilliseconds);
                            // }else{
                            //     toastr_call('warning','<?php echo $this->lang->line('pendad');?>');
                            //     var delayInMilliseconds = 4000;
                                
                            //     setTimeout(function() {
                            //         window.location.href = '/index.php/First';
                            //     }, delayInMilliseconds);
                                
                            // }
                        // }
                    // );
                    
                }
            });
        }else{
            toastr_call('warning','<?php echo $this->lang->line('docreq');?>');
        }
    }
</script>



