import Head from 'next/head'
import Link from 'next/link'
import Image from 'next/image'

import styles from '../styles/layout.module.css'

const english_name = 'Ben H Glick'
export const siteTitle = 'Ben H Glick'

function Layout({ children, home }) {
  return (
    <div className={styles.container}>
      <header className={styles.header}>
        {home ? (
        ):(
        )}
      </header>
    </div>
  )
}

export default Layout;
