const { createElement, Fragment } = window.wp.element
const { registerFormatType, toggleFormat } = window.wp.richText
const { RichTextShortcut } = window.wp.editor;
const { RichTextToolbarButton } = window.wp.blockEditor;
[
  {
    name: 'smaller',
    title: ' Smaller',
    icon: 'arrow-down',
  },
  {
    name: 'wide',
    title: ' Wide',
    icon: 'leftright',
  },
  {
    name: 'outlined',
    title: ' Outlined',
    icon: 'marker',
  },
  {
    name: 'special',
    title: ' Special',
    icon: 'admin-appearance',
  }
].forEach(({ name, title, icon}) => {
  const type = 'advanced/' + name;

  registerFormatType(type, {
    title,
    tagName: 'span',
    className: name,
    edit ({ isActive, value, onChange }) {
      const onToggle = () => onChange(toggleFormat(value, { type }))

      return (
        createElement(Fragment, null,
          createElement(RichTextToolbarButton, {
            title,
            icon: icon,
            onClick: onToggle,
            isActive,
            className: 'toolbar-button-with-text toolbar-button__advanced-' + name
          })
        )
      )
    }
  })
})