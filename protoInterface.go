package goridge

type ProtoInterface interface {
	ProtoUnmarshal(data []byte, v interface{}) (err error)
}
