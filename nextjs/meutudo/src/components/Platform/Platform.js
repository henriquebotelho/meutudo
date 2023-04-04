import React from "react"
import Image from 'next/image'

import style from './Platform.module.scss'

const Platform = () => {

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
            <span className="pre-title">Nossa plataforma</span><h3 className="title small black">No site ou no aplicativo, as melhores oportunidades de crédito para você</h3>          <ul className="list-check">
              <li>Fácil acesso e rapidez nos processos de contratação</li>
              <li>Independência para você verificar suas informações 24h por dia</li>
              <li>Liberdade para você escolher a sua melhor oportunidade</li>
              <li>Portabilidade online do seu consignado</li>
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