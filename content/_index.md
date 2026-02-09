---
date: "2022-10-24"
design:
  spacing: 6rem
sections:
- block: resume-biography-3
  content:
    button:
      text: Download CV
      url: resume.pdf
    text: ""
    username: admin
  design:
    background:
      color: black
      image:
        filename: image.jpg
        filters:
          brightness: 1
        parallax: false
        position: right
        size: cover
    css_class: dark

- block: markdown
  content:
    subtitle: ""
    text: |
      StanDat offers comprehensive access to data on international standards. The database is composed of information gathered from the webpages of the International Organization for Standardization (ISO).
      
      [![The StanDat Database](./publication/standat/featured.png)](https://solveig.shinyapps.io/standat/)
      
    title: "📊 The StanDat Database"
  design:
    columns: "1"

# - block: collection
#   content:
#     filters:
#       featured_only: true
#       folders:
#       - publication
#     title: Featured Publications
#   design:
#     columns: 2
#     view: article-grid
#   id: papers

- block: collection
  content:
    filters:
      exclude_featured: false
      folders:
      - publication
    text: ""
    title: Publications
  design:
    view: citation
  id: papers

- block: collection
  content:
    filters:
      folders:
      - teaching
    title: Teaching
  design:
    columns: 4
    view: article-grid
  id: talks
# - block: collection
#   content:
#     count: 5
#     filters:
#       author: ""
#       category: ""
#       exclude_featured: false
#       exclude_future: false
#       exclude_past: false
#       publication_type: ""
#       tag: ""
#     offset: 0
#     order: desc
#     page_type: post
#     subtitle: ""
#     text: ""
#     title: Recent News
#   design:
#     spacing:
#       padding:
#       - 0
#       - 0
#       - 0
#       - 0
#     view: date-title-summary
#  id: news
title: ""
type: landing
---
