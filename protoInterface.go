package goridge

type ProtoInterface interface {
	ProtoUnmarshal(data []byte) (err error)
}
