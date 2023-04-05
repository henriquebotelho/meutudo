import React from "react"
import Image from 'next/image'

import style from './Download.module.scss'

const Download = ({ data }) => {
  return (
    <section className={style.download}>
      <div className="container">
        <div className="row align-items-center">
          <div className="col">
            <div className={style.wrapper}>
              <Image
                src={require('../../public/images/section_7_1.webp')}
                alt='MeuTudo'
              />
              <div className={style.text}>
                {data.text && <h2 dangerouslySetInnerHTML={{ __html: data.text }} />}
                <div className={style.store}>
                  <a href="https://google.com" target="_blank">
                    <Image
                      src={require('../../public/images/app_google.webp')}
                      alt='MeuTudo'
                    />
                  </a>
                  <a href="https://apple.com" target="_blank">
                    <Image
                      src={require('../../public/images/app_apple.webp')}
                      alt='MeuTudo'
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
export default Download