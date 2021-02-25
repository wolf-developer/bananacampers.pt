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
                    <button class="multisteps-form__progress-btn" type="button" title="Sleeping spots on the vehicle">4</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle Equipements">5</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle doc">9</button>
                </div>
            </div>
            <div >
                <h3><?php echo $this->lang->line('ttl1');?></h3>
                <p> <?php echo $this->lang->line('ttl2');?></p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mtop1">
                            <div class="mt-3">
                            <input type="file" id="photo1" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-1</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop2">
                            <div class="mt-3">
                            <input type="file" id="photo2" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-2</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop3">
                            <div class="mt-3">
                            <input type="file" id="photo3" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-3</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop4">
                            <div class="mt-3">
                            <input type="file" id="photo4" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-4</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop5">
                            <div class="mt-3">
                            <input type="file" id="photo5" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-5</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop6">
                            <div class="mt-3">
                            <input type="file" id="photo6" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-6</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop7">
                            <div class="mt-3">
                            <input type="file" id="photo7" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-7</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop8">
                            <div class="mt-3">
                            <input type="file" id="photo8" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-8</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop9">
                            <div class="mt-3">
                            <input type="file" id="photo9" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-9</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop10">
                            <div class="mt-3">
                            <input type="file" id="photo10" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-10</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop11">
                            <div class="mt-3">
                            <input type="file" id="photo11" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-11</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop12">
                            <div class="mt-3">
                            <input type="file" id="photo12" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-12</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop13">
                            <div class="mt-3">
                            <input type="file" id="photo13" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-13</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop14">
                            <div class="mt-3">
                            <input type="file" id="photo14" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-14</b></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mtop15">
                            <div class="mt-3">
                            <input type="file" id="photo15" data-plugins="dropify" data-max-file-size="10M" />
                                <button class="btn btn-outline-danger btn-block" disabled><b><?php echo $this->lang->line('ph');?>-15</b></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div style="text-align:center">
                <hr><div><a href="#" style="text-decoration:none;" onclick="addmorephoto()"><?php echo $this->lang->line('addph');?></a></div>
                <hr><button class="btn btn-info btn-lg" onclick="back_step2()"><?php echo $this->lang->line('back');?></button>
                <button class="btn btn-primary btn-lg" onclick="to_step4()"><?php echo $this->lang->line('next');?></button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('st3r1');?></h3>
                <p><?php echo $this->lang->line('st3r2');?></p>
            </div>
            <div class="aside_advice">
                <h3><?php echo $this->lang->line('st3r3');?></h3>
                <p><?php echo $this->lang->line('st3r4');?></p>
                <p><?php echo $this->lang->line('st3r5');?></p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $('.mtop2').css('display','none');
    $('.mtop3').css('display','none');
    $('.mtop4').css('display','none');
    $('.mtop5').css('display','none');
    $('.mtop6').css('display','none');
    $('.mtop7').css('display','none');
    $('.mtop8').css('display','none');
    $('.mtop9').css('display','none');
    $('.mtop10').css('display','none');
    $('.mtop11').css('display','none');
    $('.mtop12').css('display','none');
    $('.mtop13').css('display','none');
    $('.mtop14').css('display','none');
    $('.mtop15').css('display','none');
})
var cnt=1;
var photo = [];
var click =1;

function addmorephoto(){
    if(cnt<15){
        $('.mtop'+(++cnt)).css('display','block');
    }else{
        cnt=15;
    }
    
}

function to_step4(){
    if(click == 1){
        click = 2;
        for(var p=0;p<cnt;p++){
            photo[p+1] = $('#photo'+(p+1)).val();
        }
        if(photo[1]==''){
            toastr_call("info","<?php echo $this->lang->line('st3js1');?>");
        }else{
            for(var q=0;q<cnt;q++){
                if(photo[q+1]==''){
                    toastr_call("error","<?php echo $this->lang->line('st3js2');?>");
                    return;
                }
            }
            
            var formdata = new FormData();
            formdata.append('cnt', cnt);

            for(var e=1;e<=cnt;e++){
                formdata.append('p_'+e, $('#photo'+e)[0].files[0]);
            }

            $.ajax({
                url: '/index.php/Create_ads/create_step3',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                data: formdata,
                success:function (data) {
                    
                    window.location.href = '/index.php/Create_ads/step4/';
                }
            });
        }
    }else{
        return;
    }
    
    

}

function back_step2(){
    window.location.href = '/index.php/Create_ads/step2/';
}
</script>



