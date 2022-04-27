<template>
  <div>
    {{ greet }}
    <input @update="updateMessage" :value="message" type="textarea">
    <button @click.prevent="submit">
      送信
    </button>
  </div>
</template>

<script>
export default{
  async asyncData({ app }) {
    const greet = await app.$axios.$get('/').catch((err) => err)
    return { greet }
  },
  computed: {
    message: {
      get() {
        this.$store.state.chat.data.text
      },
      set(val) {
        this.$store.commit('chat/SET_TEXT', val)
      },
    }
  },
  methods: {
    updateMessage(val) {
      this.$store.commit('chat/SET_TEXT', val)
    },
    submit() {
      this.$store.dispatch('chat/submit')
      this.$axios.post('/chat', this.message, headers)
    }
  }
}
</script>
