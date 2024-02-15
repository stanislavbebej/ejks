terraform {
  cloud {
    organization = "gcp-sb-devel"

    workspaces {
      name = "ejks-sk"
    }
  }
}
