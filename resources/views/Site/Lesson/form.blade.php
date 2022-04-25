

<div class="lecture-item">
    <h1>اسم الدرس</h1>
    {!!Form::text('name',null,['class'=>'form-control'])!!}
</div>
<!-- /.lecture-item -->
<div class="lecture-item">
    <h1>رفع صورة للدرس</h1>
    {!!Form::file('image',null,['class'=>'form-control'])!!}
</div>

<div class="lecture-item">
    <div class="add_cont text-right">
        <label class="text-right">
            <input type="checkbox" id="up-video">
            <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
        </label>

        <div class="videoUploaded col-xs-12 text-right">
            <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
            {!!Form::file('video',null,['class'=>'form-control'])!!}
        </div>

    </div>
</div>
<!-- /.lecture-item -->
<div class="lecture-item">
    <h1>وصف الدرس</h1>
    {!!Form::textarea('description',null,['class'=>'form-control','rows'=> 2])!!}
</div>
<!-- /.lecture-item -->

<div class="lecture-item">
    <h1>ترتيب الدرس</h1>
    {!!Form::number('sequence',null,['class'=>'form-control'])!!}
</div>
<!-- /.lecture-item -->

<div class="lecture-item text-right">
    <div class="fileUpload col-xs-12 text-right">
        <span><i class="fa fa-file"></i> رابط أوراق العمل </span>
        <input type="file" class="upload">
    </div>
    <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>
</div>
