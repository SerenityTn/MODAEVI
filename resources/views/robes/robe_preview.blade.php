<div class="col-sm-2">
    <?php $img_name = "robe0.jpg"; if(!empty($robe->img_name)) $img_name = $robe->img_name;?>
    <img id="img-prev" src="{{ URL::asset("imgs/robes/$img_name") }}" width="300" />
</div>
