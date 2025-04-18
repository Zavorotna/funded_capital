
<div class="border_form">
  <div class="button_block reg_cta grid col_2"><a class="tac" id="loginBtn" href="#">Log in</a><a class="black_cta tac" id="signupBtn" href="#">Sign up</a></div>
  <form class="form hidden" id="loginForm" action="#">
    <div>
      <label><span>Your email*</span>
        <input type="email" placeholder="nameofemail@gmail.com" required="required"/><span class="error">error</span>
      </label>
    </div>
    <div>
      <label><span>Password*</span>
        <input type="password" placeholder="************" required="required"/><span class="error">error</span>
      </label>
    </div>
    <div class="button_form">
      <button class="black_cta black" type="submit">Log in</button>
    </div>
    <div class="tac"> <span>Dont have an account? <a id="switchToSignup" href="#">Sign up</a></span></div>
  </form>
  <form class="form" id="signupForm" action="#">
    <div class="grid col_2 gap">
      <label> <span>First name*</span>
        <input type="text" placeholder="First name" required="required" oninput="this.value = this.value.replace(/[^a-zA-Zа-яА-ЯїЇєЄіІґҐ ]/g, '')"/><span class="error"></span>
      </label>
      <label><span>Last name*</span>
        <input type="text" placeholder="Last name" required="required" oninput="this.value = this.value.replace(/[^a-zA-Zа-яА-ЯїЇєЄіІґҐ ]/g, '')"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label><span>Your email*</span>
        <input type="email" placeholder="nameofemail@gmail.com" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label><span>Password*</span>
        <input type="password" placeholder="************" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label><span>Confirm Password*</span>
        <input type="password" placeholder="************" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label><span>Referral Code(Optional)</span>
        <input type="text" placeholder="QWERTY12345"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label class="items-center approve_container gap"><span class="parent">
          <input class="approve" type="checkbox" name="approve" value="1" checked="checked"/><span></span></span><span>I certify that I am 18 years of age or older, agree to the <a href="#">User Agreement</a>, and acknowledge the <a href=""> Privacy policy.</a></span></label>
    </div>
    <div class="button_form">
      <button class="black_cta" type="submit">Create Account</button>
    </div>
    <div class="tac"> <span>Already have an account? <a id="switchToLogin" href="#">Login here</a></span></div>
  </form>
</div>