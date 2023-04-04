import React, { useEffect, useRef, useState } from "react"
import Image from 'next/image'
import Link from 'next/link'

import style from './Header.module.scss'

import logo from '../../public/images/logo.webp'

const Header = () => {

  const [isSticky, setSticky] = useState(false)

  useEffect(() => {
    const handleScroll = () => setSticky(window.scrollY > 50 ? true : false)
    
    window.addEventListener('scroll', handleScroll);
    return () => {
      window.removeEventListener('scroll', handleScroll);
    }
  }, [])

  return (

    <header className={`${style.header} ${isSticky ? style.scrolling : ''} fixed-top`}>
      <div className="container-xl">
        <div className="row">
          <div className="col-lg-12">
            <nav className="navbar navbar-expand-lg navbar-light">
              <Link href="/" className={`navbar-brand ${style.logo}`}>
                <Image
                  src={logo}
                  alt='MeuTudo'
                  className={style['image-brand']}
                />
              </Link>
              <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" className=""></path>
                </svg>
              </button>

              <div className="collapse navbar-collapse" id="navbarCollapse">
                <div className={`ms-auto ${style.menuContainer}`}>
                  <ul className={`navbar-nav ${style.menu}`}>
                    <li id="menu-item-5" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-5 nav-item"><a href="#quem-somos" className="nav-link">Quem somos</a></li>
                    <li id="menu-item-7" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-7 nav-item"><a href="#seu-credito" className="nav-link">Seu crédito</a></li>
                    <li id="menu-item-8" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-8 nav-item"><a href="#blog" className="nav-link">Blog</a></li>
                    <li id="menu-item-9" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-9 nav-item"><a href="#carreiras" className="nav-link">Carreiras</a></li>
                    <li id="menu-item-10" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-10 nav-item"><a href="#ajuda" className="nav-link">Ajuda</a></li>
                    <li id="menu-item-11" className="button outline menu-item menu-item-type-custom menu-item-object-custom menu-item-11 nav-item"><a href="#entrar" className="nav-link">Entrar</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
  )
}

export default Header