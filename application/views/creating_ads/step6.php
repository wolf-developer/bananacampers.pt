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
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle doc">9</button>
                </div>
            </div>
            <div >
                <h3><?php echo $this->lang->line('st6t1');?></h3>
                <p><?php echo $this->lang->line('st6t2');?></p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr> 
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="descript"> <?php echo $this->lang->line('st6t5');?>  *</label>
                            <div class="form-group">
                                <textarea type="text" id="descript" style="font-size:18px;" rows="5" cols="40" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div style="text-align:center">
                <hr><button class="btn btn-primary btn-lg" onclick="back_step5()"><?php echo $this->lang->line('back');?></button>
                <button class="btn btn-primary btn-lg" onclick="to_step7()"><?php echo $this->lang->line('next');?></button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('st6t3');?></h3>
                <p><?php echo $this->lang->line('st6t4');?></p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read_intro',
        function(data){
            $('#descript').val(data);
        }
    );
});


function to_step7(){
    var intro=$('#descript').val(); 
    if(intro==''){
        $('#descript').focus();toastr_call('info','<?php echo $this->lang->line("require");?>');return;
    }else{
        $.post(
            '/index.php/Create_ads/create_intro',
            {
                intro:intro
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line("succh");?>');
                window.location.href = '/index.php/Create_ads/step7/';

            }
        );
    }
}

function back_step5(){
    window.location.href = '/index.php/Create_ads/step5/';
}
</script>


