<template>
  <div>
    {{ greet }}
    <input
      type="textarea"
      v-model="message"
    >
    <button @click.prevent="submit">
      送信
    </button>
    <button @click.prevent="test">
      表示
    </button>
    {{ testText }}
  </div>
</template>

<script>
export default {
  async asyncData({ app }) {
    const greet = await app.$axios.$get('/').catch((err) => err)
    return { greet }
  },
  data() {
    return {
      first: '',
    }
  },
  computed: {
    message: {
      get () {
        return this.first
      },
      set (value) {
        this.first = value
        this.$store.commit('chat/SET_TEXT', value)
      }
    },
    testText() {
      return this.$store.state.chat.data.test
    }
  },
  methods: {
    submit() {
      console.log(this.message)
      this.$store.dispatch('chat/submit')
    },
    test() {
      this.$store.dispatch('chat/test')
    }
  }
}
</script>
