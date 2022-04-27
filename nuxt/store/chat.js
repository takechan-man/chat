export const state = () => ({
  data: {
    text: '',
  },
})

export const mutations = {
  SET_TEXT(state, text) {
    state.data.text = text
  },
}

export const actions = {
  async submit({ state }) {
    console.log('submit')
    const headers = {
      'content-type': 'multipart/form-data',
    }
    await this.$axios.post('/chat', state.data.text, headers)
  },
}
