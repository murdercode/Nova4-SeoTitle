import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-seo-title', IndexField)
  app.component('detail-seo-title', DetailField)
  app.component('form-seo-title', FormField)
})
