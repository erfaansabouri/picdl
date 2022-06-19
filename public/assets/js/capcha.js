class Captcha {
    config = {
      width: 80,
      height: 30,
      fillStyle: '#99afa2',
      textBaseline: 'top',
      // textAlign: 'left',
      fontSize: '20px',
      fontFamily: 'Ariel',
    }
    INITIAL_SPACE = 10
    SPACE_FACTOR = 20
  
    constructor($ele, number) {
      this.$ele = $ele;
      this.number = number + '';
    }
  
    setNumber(number) {
      this.number = number;
    }
    draw() {
      if (!this.$ele) {
        throw new Error('no element provided');
      }
      const context = this.$ele.getContext('2d');
      const {
        width,
        height,
        fillStyle,
        textBaseline,
        textAlign,
        fontSize,
        fontFamily,
      } = this.config;
  
      this.$ele.width = width;
      this.$ele.height = height;
  
      context.textBaseline = textBaseline;
      context.textAlign = textAlign;
      context.font = `${fontSize} ${fontFamily}`;
      
      const gradient = context.createLinearGradient(0, 0, width, height);
      context.fillStyle = '#dae3e0'
      context.shadowOffsetX = 3;
      context.shadowOffsetY = 3;
  
      let i = 0
      for (; i < this.number.length; i += 1) {
        context.fillText(this.number.charAt(i), i * this.SPACE_FACTOR + this.INITIAL_SPACE , Math.floor(Math.random()*10));
      }
    }
  }
  
  
  
  const $refresh = document.querySelector('#refresh');
  const $captcha = document.querySelector('#captcha');
  
  let captchaValue = Math.floor(Math.random()*10000);
  const myCaptcha = new Captcha($captcha, captchaValue);
  
  $refresh.addEventListener('click', () => {
    captchaValue = Math.floor(Math.random()*10000);
    const myCaptcha = new Captcha($captcha, captchaValue);
    myCaptcha.draw();
  }, false);
  
  myCaptcha.draw();