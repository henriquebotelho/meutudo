import React from "react"
import Image from 'next/image'

import style from './Banner.module.scss'

const Banner = () => {
  return (

    <section className={style.banner}>
      <div className="container">
        <div className="row align-items-center">
          <div className="col">
            <div className={style.wrapper}>
              <Image
                src={require('../../public/images/section_6_1.webp')}
                alt='MeuTudo'
              />
              <div className={style.text}>
                <p>Faça como os <span>mais de 500 mil brasileiros</span> que já reduziram o endividamento com a meutudo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Banner