# Frontend for ejks.sk in Hugo

## Development

```bash
CGO_ENABLED=1 go install -tags extended github.com/gohugoio/hugo@latest
export PATH=$HOME/go/bin:$PATH
git submodule update --init --remote
```
