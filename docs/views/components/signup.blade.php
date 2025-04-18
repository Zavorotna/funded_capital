
<div class="border_form"> 
  <div class="button_block reg_cta grid col_2"> <a href="login_page.html">log in</a><a class="black_cta" href="signup.html">Sign up</a></div>
  <form class="form" action="#">
    <div class="grid col_2"> 
      <label>
         First name*
        <input type="text" placeholder="First name" required="required" oninput="this.value = this.value.replace(/[^a-zA-Zа-яА-ЯїЇєЄіІґҐ ]/g, '')"/><span class="error"></span>
      </label>
      <label>Last name*
        <input type="text" placeholder="Last name" required="required" oninput="this.value = this.value.replace(/[^a-zA-Zа-яА-ЯїЇєЄіІґҐ ]/g, '')"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label>Your email*
        <input type="email" placeholder="nameofemail@gmail.com" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label>Password*
        <input type="password" placeholder="************" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label>Confirm Password*
        <input type="password" placeholder="************" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label>Referral Code(Optional)
        <input type="password" placeholder="QWERTY12345" required="required"/><span class="error"></span>
      </label>
    </div>
    <div>
      <label class="items-center approve_container"><span class="parent">
          <input class="approve" type="checkbox" name="approve" value="1" checked="checked"/><span></span></span>I certify that I am 18 years of age or older, agree to the User Agreement, and acknowledge the Privacy policy.</label>
    </div>
    <button class="black_cta" type="submit">create account</button>
    <div class="tac"> <span>Already have an account? <a href="login_page.html">Login here</a></span></div>
  </form>
</div>
<p class="bottom_text">FUNDED CAPITAL® - is a proprietary company created for traders. Choose your challenge, get a live account and join our team of traders!</p>