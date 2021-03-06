<style>
    .option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  width: 25px;
  height: 25px;
  -webkit-transition: all 0.15s ease-out 0;
  -moz-transition: all 0.15s ease-out 0;
  transition: all 0.15s ease-out 0;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  outline: none;
  position: relative;
  margin-right: 0.5rem;
  z-index: 1000;
}

.option-input:hover { background: #9faab7; }

.option-input:checked { background: #40e0d0; }

.option-input:checked::before {
  width: 25px;
  height: 25px;
  position: absolute;
  content: '';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 25px;
}

.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

.option-input.radio { border-radius: 50%; }

.option-input.radio::after { border-radius: 50%; }

@-webkit-keyframes 
click-wave { 0% {
 width: 25px;
 height: 25px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}

@-moz-keyframes 
click-wave { 0% {
 width: 25px;
 height: 25px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}

@-o-keyframes 
click-wave { 0% {
 width: 25px;
 height: 25px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}

@keyframes 
click-wave { 0% {
 width: 25px;
 height: 25px;
 opacity: 0.35;
 position: relative;
}
 100% {
 width: 200px;
 height: 200px;
 margin-left: -80px;
 margin-top: -80px;
 opacity: 0.0;
}
}
</style>