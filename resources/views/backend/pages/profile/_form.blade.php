<div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">NIK</label>
    <div class="col-md-2">
        {!! Form::text('nik', Auth::user()->nik, ['class'=>'form-control','placeholder'=>'NIK']) !!}
    </div>
    @if($errors->has('nik'))
        <span class="help-block">
            <strong>{{ $errors->first('nik') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Nama Lengkap</label>
    <div class="col-md-4">
        {!! Form::text('name', Auth::user()->name, ['class'=>'form-control','placeholder'=>'Nama lengkap']) !!}
    </div>
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Tanggal Lahir</label>
    <div class="col-md-3">
        {!! Form::date('birthday', null, ['class'=>'form-control','placeholder'=>'Tanggal lahir']) !!}
    </div>
    @if($errors->has('birthday'))
        <span class="help-block">
            <strong>{{ $errors->first('birthday') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Tentang Saya</label>
    <div class="col-md-6">
        {!! Form::textarea('about_me', null, ['class'=>'form-control','placeholder'=>'Tentang saya','rows'=>'3']) !!}
    </div>
    @if($errors->has('about_me'))
        <span class="help-block">
            <strong>{{ $errors->first('about_me') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Foto</label>
    <div class="col-md-2">
        {!! Form::file('picture', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('picture'))
        <span class="help-block">
            <strong>{{ $errors->first('picture') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Jenis Kelamin</label>
    <div class="col-md-2">
        {!!Form::select('gender', ['L'=>'Laki-Laki','P'=>'Perempuan'], null, ['class'=>'select2_single form-control']) !!}
      </select>
    </div>
    @if($errors->has('gender'))
        <span class="help-block">
            <strong>{{ $errors->first('gender') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">E-Mail</label>
    <div class="col-md-5">
        {!! Form::text('email', Auth::user()->email, ['class'=>'form-control','placeholder'=>'Email']) !!}
    </div>
    @if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Kategori</label>
    <div class="col-md-3">
        {!!Form::select('category_id', [''=>'']+App\Category::pluck('name','id')->all(), null, ['class'=>'select2_single form-control']) !!}
      </select>
    </div>
    @if($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('work_location') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Lokasi Kerja</label>
    <div class="col-md-4">
        {!! Form::text('work_location', null, ['class'=>'form-control','placeholder'=>'Lokasi Kerja']) !!}
    </div>
    @if($errors->has('work_location'))
        <span class="help-block">
            <strong>{{ $errors->first('work_location') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Kota</label>
    <div class="col-md-4">
        {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'Kota']) !!}
    </div>
    @if($errors->has('city'))
        <span class="help-block">
            <strong>{{ $errors->first('city') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Area</label>
    <div class="col-md-4">
        {!! Form::text('area', null, ['class'=>'form-control','placeholder'=>'Area']) !!}
    </div>
    @if($errors->has('area'))
        <span class="help-block">
            <strong>{{ $errors->first('area') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('job_function') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Jabatan</label>
    <div class="col-md-4">
        {!! Form::text('job_function', null, ['class'=>'form-control','placeholder'=>'Jabatan']) !!}
    </div>
    @if($errors->has('job_function'))
        <span class="help-block">
            <strong>{{ $errors->first('job_function') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('mobile_phone') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Nomor Telepon</label>
    <div class="col-md-3">
        {!! Form::text('mobile_phone', null, ['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}
    </div>
    @if($errors->has('mobile_phone'))
        <span class="help-block">
            <strong>{{ $errors->first('mobile_phone') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('bank_account') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">No. Rekening Bank</label>
    <div class="col-md-3">
        {!! Form::number('bank_account', null, ['class'=>'form-control','placeholder'=>'No. Rekening Bank']) !!}
    </div>
    @if($errors->has('bank_account'))
        <span class="help-block">
            <strong>{{ $errors->first('bank_account') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Akun Twitter</label>
    <div class="col-md-4">
        {!! Form::text('twitter', null, ['class'=>'form-control','placeholder'=>'Akun Twitter']) !!}
    </div>
    @if($errors->has('twitter'))
        <span class="help-block">
            <strong>{{ $errors->first('twitter') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Akun Facebook</label>
    <div class="col-md-4">
        {!! Form::text('facebook', null, ['class'=>'form-control','placeholder'=>'Akun Facebook']) !!}
    </div>
    @if($errors->has('facebook'))
        <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Akun Instagram</label>
    <div class="col-md-4">
        {!! Form::text('instagram', null, ['class'=>'form-control','placeholder'=>'Akun Instagram']) !!}
    </div>
    @if($errors->has('instagram'))
        <span class="help-block">
            <strong>{{ $errors->first('instagram') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Catatan</label>
    <div class="col-md-6">
        {!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Catatan','rows'=>'3']) !!}
    </div>
    @if($errors->has('notes'))
        <span class="help-block">
            <strong>{{ $errors->first('notes') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('presentation_file') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">File Presentasi</label>
    <div class="col-md-2">
        {!! Form::file('presentation_file', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('presentation_file'))
        <span class="help-block">
            <strong>{{ $errors->first('presentation_file') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('checking') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Checking</label>
    <div class="col-md-2">
        {!! Form::text('checking', Auth::user()->checking == 1 ? 'Checked' : 'Unchecked', ['class'=>'form-control','readonly']) !!}
      </select>
    </div>
    @if($errors->has('checking'))
        <span class="help-block">
            <strong>{{ $errors->first('checking') }}</strong>
        </span>
    @endif
</div>

@if(isset($order))
    <div class="form-group{{ $errors->has('has_checked_in') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Has Checked In</label>
        <div class="col-md-5">
            {!!Form::select('has_checked_in', ['true'=>'true','false'=>'false'], null, ['class'=>'select2_single form-control','placeholder' => 'Pilih account coordinator']) !!}
          </select>
        </div>
        @if($errors->has('has_checked_in'))
            <span class="help-block">
                <strong>{{ $errors->first('has_checked_in') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('activated') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Activated</label>
        <div class="col-md-5">
            {!!Form::select('activated', ['true'=>'true','false'=>'false'], null, ['class'=>'select2_single form-control','placeholder' => 'Pilih account coordinator']) !!}
          </select>
        </div>
        @if($errors->has('activated'))
            <span class="help-block">
                <strong>{{ $errors->first('activated') }}</strong>
            </span>
        @endif
    </div>
@endif

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($user) ? 'Ubah Data' : 'Daftar'}}</button>
        @if(isset($user))
        | <a href="{{ url('/home') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>