const wrapper = document.querySelector('.wrapper')
const btnpopup = document.querySelector('.btnLogin-popup')
const iconClose = document.querySelector('.icon-close')
const iconClose1 = document.querySelector('.icon-close1')

btnpopup.addEventListener('click', ()=> {
  wrapper.classList.add('active-popup')
})

btnpopup.addEventListener('click', ()=> {
  wrapperS.classList.remove('active-popup')
})

// iconClose.addEventListener('click', ()=> {
//   wrapperS.classList.remove('active-popup')

// })

iconClose.addEventListener('click', ()=> {
  wrapper.classList.remove('active-popup')

})

const wrapperReg = document.querySelector('.wrapperReg')
const login = document.querySelector('.login-link')
const reg = document.querySelector('.register-link')

// открывает попап регистрации
reg.addEventListener('click', ()=> {
  wrapper.classList.remove('active-popup')
  wrapperReg.classList.add('active-popup')
})
// закрывает попап регистрации
iconClose1.addEventListener('click', ()=>{
  wrapperReg.classList.remove('active-popup')
})
// переход на попап логина
login.addEventListener('click', () => {
  wrapperReg.classList.remove('active-popup')
  wrapper.classList.add('active-popup')
})












