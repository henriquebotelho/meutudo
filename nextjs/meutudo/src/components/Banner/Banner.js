import React from "react"
import Image from 'next/image'

import style from './Banner.module.scss'

const Banner = ({ data }) => {
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
              {data.text &&
                <div className={style.text}>
                  <p dangerouslySetInnerHTML={{ __html: data.text }} />
                </div>
              }
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Banner