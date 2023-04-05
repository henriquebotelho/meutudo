import React from "react"
import Image from 'next/image'

import style from './Platform.module.scss'

const Platform = ({ data }) => {
  return (
    <section className={style.platform}>
      <div className="container">
        <div className="row">
          <div className="col-lg-5">
            <Image
              src={require('../../public/images/section_4_1.webp')}
              alt='MeuTudo'
            />
          </div>
          <div className="col-lg-6 offset-lg-1">
            {data.label && <span className="pre-title">{data.label}</span>}
            {data.title && <h3 className="title small black">{data.title}</h3>}
            <ul className="list-check">
              {data.list.map((item, index) => (
                <li key={index}>{item}</li>
              ))}
            </ul>
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
    </section>
  )
}

export default Platform